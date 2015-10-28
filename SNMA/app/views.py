from django.shortcuts import render,render_to_response
from django.http import HttpResponse,HttpResponseRedirect
import models
import django_comments.models
from django.contrib import auth
# Create your views here.
def index(request):
    blog_list = models.Blog.objects.all()
    return render_to_response('index.html', {
                                             'blog_list':blog_list,
                                             'user':request.user,
                                             })
def login(request):
    return render_to_response('login.html')
   

def acc_login(request):
    username = request.POST.get('username')
    password = request.POST.get('password')
    user = auth.authenticate(username=username,password=password)
    print username,password
    if user is not None: #and user.is_active:
        #correct password and user is marked "active"
        auth.login(request,user)
        content = '''
        Welcome %s !!!
        <a href='/logout/' >Logout</a>
         ''' % user.username
        #return HttpResponse(content)
        return HttpResponseRedirect('/')
    else:
        return render_to_response('login.html',{'login_err':'Wrong username or password!: )'})

def logoutview(request):
    user = request.user
    auth.logout(request)
    # Redirect to a success page.
    return render_to_response('index.html')
    

def register(request):
    return render_to_response('register.html')

def postlist(request):
    blog = models.Blog.objects.get(id=blog_id)      
    return render_to_response('postlist.html',{
                                               'blog_obj':blog,
                                               'user':request.user,
                                               })

