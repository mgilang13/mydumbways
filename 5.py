#!/usr/bin/env python
# coding: utf-8

# In[28]:


import random, string

def generate(val):
    for i in range(val):
        serialNumberList = list()

        for j in range(4):
            serialNumber = ''.join(random.choice(string.ascii_lowercase + string.digits) for _ in range(4))
            serialNumberList.append(serialNumber)

        serialNumberFix = '-'.join(serialNumberList)
        print(serialNumberFix)
    
val = int(input('Masukkan jumlah serial number: '))
generate(val)


# In[ ]:





# In[ ]:




