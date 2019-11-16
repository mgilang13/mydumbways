#!/usr/bin/env python
# coding: utf-8

# In[116]:


def cetak_gambar(val):
    for i in range(val):
        if i%2==0:
            print((val-3)*' * ='+' *')
        else:
            print((val-3)*' = *'+' =')


val = int(input("Masukkan jumlah sisi ganjil: "))
cetak_gambar(val)
    

