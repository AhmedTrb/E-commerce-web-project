from bs4 import BeautifulSoup
import requests as req
import csv 
from random import randint,uniform
from bs4 import BeautifulSoup
import mysql.connector


def scrape_data(URL):
    response = req.get(URL)
    if response.status_code == 200:
        soup = BeautifulSoup(response.text, 'lxml')
        
        products_list = []
        
        # getting all product items
        products = soup.find_all('li',class_="item product product-item")
        
        # getting data from each item
        for pr in products:
            pr_name = pr.find('strong',class_="product name product-item-name").text.strip()
            l = pr_name.split()
            pr_brand = l[2]
            pr_desc = pr.find('div',class_="product description product-item-description").p.text.strip()
            pr_discount=0.0 ;pr_special_price=0.0
            
            
            tmp = pr.find('span',class_="special-price")
            if tmp!=None: 
                pr_special_price = tmp.find('span',class_="price").text.strip()
                pr_discount = pr.find('span',class_="discount-price").text.strip()
                a = pr.find('span',class_="old-price")
                pr_old_price = a.find('span',class_="price").text.strip()
            else :
                pr_old_price = pr.find('span',class_="price").text.strip()
                
            pr_imgURL = pr.find('img',class_="product-image-photo").get('src')
            
            pr_status = pr.find('div',class_="card-body").span.text.strip()
            
            if pr_status == "En Stock": pr_status = "In Stock"
            elif pr_status == "En Arrivage":pr_status="Arriving"
            
            
            products_list.append([pr_name,pr_desc,"",0,pr_old_price,pr_special_price,randint(0,50),"2024-04-02",pr_discount,pr_imgURL,uniform(1,5),pr_status])
            # print (pr_old_price," ",pr_special_price," ",pr_discount)
        return products_list
    
    else: print("unable to load")

    
# Scrapping all data
def get_products(D):
    L_products =[]
    for cat in D:
        L=scrape_data(D[cat])
        
        # missing category value in products list 
        for e in L:
            e[2]=cat
            
        L_products+=L
    return L_products
 
 
      
# storing the URLs with their corresponding category
D = {
    "CPU":"https://www.mytek.tn/catalogsearch/result/?q=processeur" ,
    "GPU":"https://www.mytek.tn/catalogsearch/result/index/?product_list_order=price&q=carte%20graphique&product_list_dir=desc",
    "RAM": "https://www.mytek.tn/gaming/composant-pc-gamer/barrette-memoire-gamer.html?product_list_dir=desc",
    "Mother Board": "https://www.mytek.tn/catalogsearch/result/index/?product_list_dir=desc&q=carte%20mere&product_list_order=price#" ,
    "PC case":"https://www.mytek.tn/gaming/composant-pc-gamer/boitier-pc-gamer.html?product_list_dir=desc" ,
    "Memory":"https://www.mytek.tn/catalogsearch/result/index/?product_list_dir=desc&q=disque%20dur%20interne&product_list_order=price",
    "Mouse":"https://www.mytek.tn/gaming/peripheriques-et-accessoires-gamers/souris-gamer.html?product_list_dir=desc",
    "Keyboard":"https://www.mytek.tn/gaming/peripheriques-et-accessoires-gamers/clavier-gamer.html?product_list_dir=desc" ,
    "Headset":"https://www.mytek.tn/gaming/peripheriques-et-accessoires-gamers/micro-casque-gamer.html?product_list_dir=desc" ,
    "Mousepad":"https://www.mytek.tn/gaming/peripheriques-et-accessoires-gamers/tapis-de-souris-gamer.html?product_list_dir=desc" ,
    "Monitors" :"https://www.mytek.tn/gaming/peripheriques-et-accessoires-gamers/ecran-gamer.html?product_list_dir=desc"
}  

# connecting to mysql database and inserting data        
cnx = mysql.connector.connect(
        host='localhost',
        user='root',
        port='3307', # check if mysql is running on port 3307 on your computer
        password='',
        database='setupsprint_ecommerce_website'
)

cursor = cnx.cursor()

data = get_products(D)
for pr in data:
    cursor.execute("""INSERT INTO product (ProductName, Description,Category,SupplierID,OldPrice,SpecialPrice,QuantityInStock,DateAdded,Discount,ImageURL,Rating,Status) 
                   VALUES (%s, %s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s)""", pr)


cnx.commit()
cursor.close()
cnx.close()