#!/usr/bin/env python
# coding: utf-8

# In[29]:


def hitungKembalian(totalPembelian, uangMasuk):
    
    uangPecahan = [50000, 20000, 10000, 5000, 2000, 500]
    uangSisa = uangMasuk-totalPembelian

    for i in range(len(uangPecahan)):
        uangSisa2 = uangSisa%uangPecahan[i]
        uangNyata = uangSisa-uangSisa2
        jumlahUangNyata = int(uangNyata/uangPecahan[i])
        print(str(uangPecahan[i])+' berjumlah '+str(jumlahUangNyata))
        uangSisa = uangSisa2

totalPembelian = int(input("Masukkan total pembelian: "))
uangMasuk = int(input("Masukkan uang anda: "))

hitungKembalian(totalPembelian, uangMasuk)


# In[14]:


89500%50000


# In[ ]:




