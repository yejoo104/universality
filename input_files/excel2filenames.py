
import pandas as pd

def excel2filenames():
    df = pd.read_excel(r'select48.xlsx')
    filenames = []
    
    for index, row in df.iterrows():
        filename = "soundFiles/" + row['Language'] + "/lowPassed/" + row['corpus_ID']
        filenames.append(filename)
    
    return filenames

if __name__ == "__main__":
    print(excel2filenames())
    
