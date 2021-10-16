from django.db import models
class User (models.Model):
    username = models.CharField(max_length=25)
    name = models.CharField(max_length=25)
    password = models.CharField(max_length=25)

class Tasks (models.Model) :
    status = models.CharField(max_length=10)
    description = models.CharField(max_length=40)
    date = models.DateField(default=' ')
    user_id = models.ForeignKey(User, on_delete=models.CASCADE)
# Create your models here.
