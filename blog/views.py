from django.shortcuts import render
from . models import Post
# Create your views here.
from django.views.generic import ListView

class PostList(ListView):
    model = Post

    def get_queryset(self):
        return Post.objects.order_by('-created')

#def index(request):
#    posts = Post.object.all()
#    return render(
#        request,
#       'blog/index.html',
#        {
#            'posts': posts,
#       }
#   )