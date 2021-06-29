from django.db import models
from django.db.models.base import Model

# Create your models here.




class Contact(models.Model):
    name= models.CharField(max_length=50)
    email = models.CharField(max_length=50)
    phone = models.CharField(max_length=13)
    desc = models.TextField(max_length=500)
    date = models.DateField()



    def __str__(self):
        return self.name




class Insurance(models.Model):
    name=models.CharField(max_length=20)
    carnumber=models.CharField(max_length=13)
    phone=models.CharField(max_length=13)
    date = models.DateField()

    def __str__(self):
        return self.name


        


