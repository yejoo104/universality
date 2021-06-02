import pandas as pd
import numpy as np

def processdata(datafile):
    df = pd.read_csv(datafile)
    df = df[df['task'] == 'response']
    df = df[['data_type', 'L1', 'Excerpt1', 'L2', 'Excerpt2', 'Stimulus1', 'Stimulus2', 'time_elapsed', 'timestamp', 'rt', 'response']]
    
    for i, row in df.iterrows():
        df.at[i, 'response'] = int(row['response']) + 1
        
    df = df.astype({'Excerpt1': int, 'Excerpt2': int})
    df.index = np.arange(1, len(df) + 1)
    df.index.name = "trial number"
    df.to_csv(datafile[:-4] + "_cleaned.csv")

if __name__ == "__main__":
    processdata("subj_2_trialList_3_data.csv")
