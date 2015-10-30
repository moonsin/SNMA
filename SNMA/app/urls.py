from django.conf.urls import include,url,patterns

import views


urlpatterns = patterns('',
                       (r'^$',views.index),
                       (r'^login/$',views.login),
                       (r'^register/$',views.register),
                       (r'^postlist/(\d+)/$',views.postlist),
                       (r'^logout/$',views.logoutview),
                       (r'^add_user/$',views.add_user)
                       )
