
import numpy as np
import pandas as pd
from numpy import random

def createTrialList(langs, stim, trials, subject, N):
    df = pd.read_excel(r'TrialLists.xlsx', sheet_name = 'List')

    # Step 1: Assign Excerpt Numbers
    # Iterate through each language
    for lang in langs:
        # Generate a random permutation
        perm = list(np.random.permutation(range(1, stim + 1)))
        
        # Iterate through each row of dataframe
        for i in range(trials):
            # Fill in Excerpt1 if L1 indicates this language
            if df['L1'][i] == lang:
                df.at[i, 'Excerpt1'] = perm.pop(0)
            
            # Same thing for Excerpt2
            if df['L2'][i] == lang:
                df.at[i, 'Excerpt2'] = perm.pop(0)

    # Save after step 1
    df = df.astype({"Excerpt1": int, "Excerpt2": int})
    #df.to_csv('test.csv', index = False)

    # Step 2: Flip Randomly the order of recordings
    for i in range(trials):
        # Flip a coin
        coin = random.rand()
        
        # Coin heads
        if coin < 0.5:
            templang = df['L1'][i]
            tempexcerpt = df['Excerpt1'][i]
            df.at[i, 'L1'] = df['L2'][i]
            df.at[i, 'Excerpt1'] = df['Excerpt2'][i]
            df.at[i, 'L2'] = templang
            df.at[i, 'Excerpt2'] = tempexcerpt
            
    # Save after step 2
    #df.to_csv('test2.csv', index = False)

    # Step 3: pseudo random order
    selectable = [i for i in range(trials)]
    random.shuffle(selectable)
    dict = {lang: 0 for lang in langs}
    order = []
    unordered = []

    # Randomly select each time
    for i in selectable:
        lang1 = df['L1'][i]
        lang2 = df['L2'][i]
        
        # If count list is fine, add next. If not, keep in unordered list.
        if dict[lang1] >= N or dict[lang2] >= N:
            unordered.append(i)
        else:
            order.append(i)
            # Update count list after adding to order (how many times did lang appear up to now?)
            for lang in langs:
                if lang in [lang1, lang2]:
                    dict[lang] += 1
                else:
                    dict[lang] = 0

    # Reiterate through unordered
    for i in unordered:
        lang1 = df['L1'][i]
        lang2 = df['L2'][i]
        
        # Indices in order that this can be inserted into --> randomly select
        random_ind = [i for i in range(len(order))]
        random.shuffle(random_ind)
        
        # Go through each index
        for j in random_ind:
            # Check if insertion makes sense
            around = order[max(j - N, 0):min(j + N, len(order))]
            
            insertable = True
            for k in range(len(around) - N + 1):
                potential = around[k: k + N]
                lang1_check = [df['L1'][x] == lang1 or df['L2'][x] == lang1 for x in potential]
                if all(lang1_check):
                    insertable = False
                    break
                lang2_check = [df['L1'][x] == lang2 or df['L2'][x] == lang2 for x in potential]
                if all(lang2_check):
                    insertable = False
                    break
            
            # There were no repeats --> no problem! Insert i into jth index
            if insertable:
                order.insert(j, i)
                break

    #print(order)
    #print(len(order))

    # Redo the orders in the dataframe
    for i in range(len(order)):
        df.at[order[i], 'Order'] = i + 1
        
    #df.to_csv('test3.csv', index = False)
        
    # Reorder the dataframe
    df.sort_values(by = 'Order', inplace = True)
    savename = "trialList_subject" + str(subject) + ".csv"
    df.to_csv(savename, index = False)

if __name__ == "__main__":
    langs = ["En", "Du", "Ge", "It", "Ja", "Sp", "Ta"]
    
    # Definitions
    stim = 48
    trials = 28 * 6
    subjects = 100
    N = 3
    
    # Creating
    for i in range(subjects):
        createTrialList(langs, stim, trials, i + 1, N)
