from django.db import models
from django.contrib.auth.models import User

# Create your models here.
class Blog_user(models.Model):
    user = models.OneToOneField(User)
    phoneNumber = models.IntegerField()
    signature = models.CharField(max_length = 128,default='This lazy gay is too lazy to leave any thing:)')
    photo = models.ImageField(upload_to = "upload_imgs/")
    firstname = models.CharField(max_length = 16)
    lastname = models.CharField(max_length =16)
    email = models.EmailField()
    def __unicode__(self):
        return self.user.username
    
class Blog(models.Model):
    title = models.CharField(max_length=64)
    summary = models.CharField(max_length=200,blank=True,null=True)
    content = models.TextField()
    category = models.CharField(max_length=64)
    author = models.ForeignKey('Blog_user')
    view_counts = models.IntegerField()
    #created_at = models.DateField(auto_now=True)
    update_at = models.DateField(auto_now=True)
    #comment
    def __unicode__(self):
        return self.title
    
#class Category(models.Model):
#    name = models.CharField(max_length=32,unique=True)