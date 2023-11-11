from django.db import models
from django.contrib.auth.models import user
class Post(models.Model):
    title=models.charField(max_length=30)
    content=models.TextField()

    created= models.DateTimeField()

    author=models.ForeignKey()
