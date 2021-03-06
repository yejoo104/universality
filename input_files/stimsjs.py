
import pandas as pd
import json

def stimsjs():
    df = pd.read_excel(r'select48.xlsx')
    stims = {}
    
    for index, row in df.iterrows():
        if row['Language'][:2] in stims:
            stims[row['Language'][:2]].append("soundFiles/" + row['Language'] + "/lowPassed/" + row['corpus_ID'][:-3] + 'wav')
        else:
            stims[row['Language'][:2]] = ["soundFiles/" + row['Language'] + "/lowPassed/" + row['corpus_ID'][:-3] + 'wav']
    
    with open('stims.js', 'w', encoding = 'utf-8') as writer:
        writer.write("var stims = " + json.dumps(stims))

def stimsjsfolders(filename, folder):
    df = pd.read_excel(r'select48.xlsx')
    stims = {}
    
    for index, row in df.iterrows():
        if row['Language'][:2] in stims:
            stims[row['Language'][:2]].append("soundFiles/" + row['Language'] + "/" + folder + "/" + row['corpus_ID'][:-3] + "wav")
        else:
            stims[row['Language'][:2]] = ["soundFiles/" + row['Language'] + "/" + folder + "/" + row['corpus_ID'][:-3] + "wav"]
    
    with open(filename, 'w', encoding = 'utf-8') as writer:
        writer.write("var stims = " + json.dumps(stims))

if __name__ == "__main__":
    stimsjs()
    stimsjsfolders("stims_normalized.js", "normalized")
    stimsjsfolders("stims_lp400.js", "lp400")
    stimsjsfolders("stims_lp300.js", "lp300")
