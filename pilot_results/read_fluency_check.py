import pandas as pd
import numpy as np
import json
import os

def compile_reading_qs(datafile):
    df = pd.read_csv(datafile)
    
    # Get Fluency Responses
    df = df[df['data_type'] == 'filter']
    if len(df) == 0:
        return
    response = df.iloc[0]['response']
    
    # Extract subject Id
    subj_id = datafile.split('_')[2]
    
    # Convert Fluence Responses to Dictionary
    dict = json.loads(response)
    
    # Create a list of rows
    rows = [[datafile, subj_id, 'Q1', "My house is " + dict['Q0']],
            [datafile, subj_id, 'Q2', "When I was young " + dict['Q1']],
            [datafile, subj_id, 'Q3', "It's raining tomorrow, so " + dict['Q2']],
            [datafile, subj_id, 'Q4', "I could have never imagined that " + dict['Q3']]]
    
    # Add to overall rows
    for row in rows:
        rows_overall.append(row)

if __name__ == "__main__":
    rows_overall = []
    for filename in os.listdir('./'):
        if (filename.startswith("norm") or filename.startswith("lp300")) and filename.endswith(".csv"):
            compile_reading_qs(filename)
    
    df = pd.DataFrame(rows_overall, columns = ["File Name", "Subject ID", "Question Number", "Formulated Sentence"])
    
    df.to_csv("FluencyAnswers.csv")
