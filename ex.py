#!/usr/bin/env python
# coding: utf-8

# In[25]:


from pytrends.request import TrendReq

pytrends = TrendReq(hl='en-US')
import matplotlib.pyplot as plt
import numpy as np
import matplotlib.dates as mdates
import mysql.connector

from textblob import TextBlob
plt.style.use('ggplot')
pytrends = TrendReq(hl='en-US')




all_keywords = ['Local ASA', 'Sedation ASA', 'Regional ASA', 'General ASA']
keywords = []
timeframes = ['today 5-y', 'today 12-m', 'today 3-m', 'today 1-m']

cat = '0'
geo = ''
gprop = ''

def check_trends():
    pytrends.build_payload(keywords,cat,timeframes[0], geo, gprop)
    
    data = pytrends.interest_over_time()
    mean = round(data.mean(),2)
    avg = round(data[kw][-52:].mean(),2)
    avg2 = round(data[kw][:52].mean(),2)
    trend = round(((avg/mean[kw])-1)*100,2)
    trend2 = round(((avg/avg2)-1)*100,2)
    print('The average 5 years interest of ' + kw + 'was' + str(mean[kw]) + '.')
    print('The last year interest of ' + kw + 'compared to the last 5 years has changed by' + str(trend) + '%.')
    

    if mean[kw]>75 and abs(trend) <=5:
        print('The interest for ' + kw+ 'is stable in the last 5 years')
    elif mean[kw]>75 and trend >5:
        print('The interest for ' + kw+ 'is stable and increasing in the last 5 years')
    elif mean[kw]>75 and trend < -5:
        print('The interest for ' + kw+ 'is stable and decreasing in the last 5 years')
    
    elif mean[kw]>60 and abs(trend) <=15:
        print('The interest for ' + kw+ 'is relatively stable in the last 5 years')
    elif mean[kw]>60 and trend >15:
        print('The interest for ' + kw+ 'is relatively stable and increasing in the last 5 years')
    elif mean[kw]>60 and trend <-15:
        print('The interest for ' + kw+ 'is relatively stable and decreasing in the last 5 years')
        
    elif mean[kw]>20 and abs(trend) <= 15:
        print('The interest for ' + kw+ 'is seasonal')
    elif mean[kw]>20 and trend>15:
        print('The interest for '+kw+ 'is trending')
    elif mean[kw]>20 and trend< -15:
        print('The interest for '+kw+ 'is significantly decreasing')
        
    elif mean[kw]>5 and abs(trend)<=15:
        print('The interest for '+kw+ 'is cyclical')
        
    elif mean[kw]>0 and trend>15:
        print('The interest for '+kw+ 'is new and trending')
        
    elif mean[kw]>0 and trend< -15:
        print('The interest for '+kw+ 'is declining and not capable to its peak')
        
    else:
        print('This is something to be checked.')
        
    if avg2 == 0:
        print('This didn\'t exist 5 years ago')
    elif trend2> 15:
        print('The last year interest is quite higher compared to 5 years ago.' + 'It has increased by ' + str(trend2)+'%.')
    elif trend2< -15:
        print('The last year interest is quite lower compared to 5 years ago.' + 'It has increased by ' + str(trend2)+'%.')
    else:
        print('The last year interest is comparable to 5 years ago.' + 'It has increased by ' + str(trend2)+'%.')
        
    print('')
    
def relative_comparison():
    fig = plt.figure(figsize = (10,8))
    x_pos = np.arange(len(all_keywords))
    
    pytrends.build_payload(all_keywords, cat, timeframes[0], geo, gprop)
    data = pytrends.interest_over_time()
    mean = data.mean()
    mean = round(mean/mean.max()*100,2)
    ax1 = plt.subplot2grid((3,2), (0,0),rowspan = 1, colspan = 1)
    ax2 = plt.subplot2grid((3,2), (0,1),rowspan = 1, colspan = 1)
    for kw in all_keywords:
        ax1.plot(data[kw],label = kw)
    ax2.bar(x_pos, mean, align = 'center')
    plt.xticks(x_pos, all_keywords)
    
#last 12 months
    pytrends.build_payload(all_keywords, cat, timeframes[1], geo, gprop)
    data = pytrends.interest_over_time()
    mean = data.mean()
    mean = round(mean/mean.max()*100,2)
    ax3 = plt.subplot2grid((3,2), (1,0),rowspan = 1, colspan = 1)
    ax4 = plt.subplot2grid((3,2), (1,1),rowspan = 1, colspan = 1)
    for kw in all_keywords:
        ax3.plot(data[kw],label = kw)
    ax4.bar(x_pos, mean, align = 'center')
    plt.xticks(x_pos, all_keywords)

    #last 3 months
    pytrends.build_payload(all_keywords, cat, timeframes[2], geo, gprop)
    data = pytrends.interest_over_time()
    mean = data.mean()
    mean = round(mean/mean.max()*100,2)
    ax5 = plt.subplot2grid((3,2), (2,0),rowspan = 1, colspan = 1)
    ax6 = plt.subplot2grid((3,2), (2,1),rowspan = 1, colspan = 1)
    for kw in all_keywords:
        ax5.plot(data[kw],label = kw)
    #print(mean)
    ax6.bar(x_pos, mean[0:len(all_keywords)], align = 'center')
    plt.xticks(x_pos, all_keywords)

    ax1.set_ylabel('Last 5 years')
    ax3.set_ylabel('Last year')
    ax5.set_ylabel('Last 3 months')
    ax1.set_title('Relative interest over time', fontsize=14)
    ax2.set_title('Relative interest for the period',fontsize = 14)
    ax1.legend()
    ax3.legend()
    ax5.legend()
    #plt.show()
    #print(fig, ax1)
    fig.savefig('my_plot.png')
relative_comparison()
    


# In[ ]:





# In[ ]:





# In[ ]:




