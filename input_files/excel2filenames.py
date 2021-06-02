
import pandas as pd
import json

def excel2filenames():
    df = pd.read_excel(r'select48.xlsx')
    filenames = []
    
    for index, row in df.iterrows():
        filename = "soundFiles/" + row['Language'] + "/lowPassed/" + row['corpus_ID'][:-3] + 'wav'
        filenames.append(filename)
    
    return filenames

def save_excel2filenames(filename, folder):
    df = pd.read_excel(r'select48.xlsx')
    filenames = []
    
    for index, row in df.iterrows():
        soundfile = "soundFiles/" + row['Language'] + "/" + folder + "/" + row['corpus_ID'][:-3] + 'wav'
        filenames.append(soundfile)
        
    with open(filename, 'w', encoding = 'utf-8') as writer:
        writer.write("var filenames = " + json.dumps(filenames))

if __name__ == "__main__":
    save_excel2filenames("filenames_normalized.js", "normalized")
    save_excel2filenames("filenames_lp400.js", "lp400")
    
