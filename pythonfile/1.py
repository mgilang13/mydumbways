#!/usr/bin/env python
# coding: utf-8

# In[37]:


def myfunction(angka):
    angka2 = []
    for index, value in enumerate(angka):
        angka2.append(sum(angka)-value)
    print("Jumlah Terbesar adalah: "+str(max(angka2)))
    print("Jumlah Terkecil adalah: "+str(min(angka2)))

angka = []
for i in range(5):
    n = input("Masukkan Angka Ke-"+str(i)+" :")
    angka.append(int(n))

myfunction(angka)


# In[ ]:




