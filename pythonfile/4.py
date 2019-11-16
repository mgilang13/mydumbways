#!/usr/bin/env python
# coding: utf-8

# In[11]:


def hitungVoucher(jenisVoucher, jumlahUang):
    if jenisVoucher == "DumbWaysAsik":
        potongan = 0.5*jumlahUang
        if(potongan <=20000):
            uangBayar = jumlahUang-potongan
        else:
            uangBayar = jumlahUang-20000
        kembalian = jumlahUang-uangBayar
        
    elif jenisVoucher == "DumbWaysMantap":
        potongan = 0.3*jumlahUang
        if(potongan <= 40000):
            uangBayar = jumlahUang-potongan
        else:
            uangBayar = jumlahUang-40000
        kembalian = jumlahUang-uangBayar
    
    print("Uang yang harus dibayar: "+str(uangBayar))
    print("Diskon: "+str(potongan))
    print("Kembalian: "+str(kembalian))
        
        

        
jenisVoucher = ["DumbWaysAsik", "DumbWaysMantap"]

uang = int(input("Masukkan Jumlah Uang: "))

if uang >= 20000 and uang < 50000:
    hitungVoucher(jenisVoucher[0], uang)
elif uang >= 50000:
    hitungVoucher(jenisVoucher[1], uang)


# In[ ]:





# In[ ]:




