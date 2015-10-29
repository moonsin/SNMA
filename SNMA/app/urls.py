from django.conf.urls import include,url,patterns

import views


urlpatterns = patterns('',
                       (r'^$',views.index),
                       (r'^login/$',views.login),
                       (r'^register/$',views.register),
                       (r'^postlist/$',views.postlist),
                       )
