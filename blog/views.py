from django.shortcuts import render
from . models import Post
# Create your views here.


def index(request):
    posts = Post.object.all()
    return render(
        request,
        'blog/index.html',
        {
            'posts': posts,
        }
    )