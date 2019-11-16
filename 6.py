#!/usr/bin/env python
# coding: utf-8

# In[27]:


def shellSort(arr):
    n = len(arr)
    gap = n//2
   
    while gap > 0:
        for i in range(int(gap), n):
            temp = arr[i]
            
            j=i
            
            while j >= int(gap) and arr[j-int(gap)]>temp:
                arr[j] = arr[j-int(gap)]
                j-=int(gap)
            arr[j] = temp
        gap/=2

arr = [['a', 'c', 'b', 'e', 'd'], ['g', 'e', 'f']]
arrSort1 = []
arrSort2 = []
arrSortFull = []

n1= len(arr[0])
shellSort(arr[0])

n2 = len(arr[1])
shellSort(arr[1])

for i in range(n1): 
    arrSort1.append(arr[0][i])

for i in range(n2):
    arrSort2.append(arr[1][i])

arrSortFull.append(arrSort1)
arrSortFull.append(arrSort2)

print(arrSortFull)

