from django.contrib import admin
from django.urls import path
from home import views



admin.site.site_header = 'ApanaCar'                    # default: "Django Administration"
admin.site.index_title = 'ApanaCar Admin panel '                 # default: "Site administration"
admin.site.site_title = ' ApanaCar.com ' # default: "Django site admin"


urlpatterns = [
    path('',views.home , name="home"),
    path('about',views.about , name="about"),
    path('contact',views.contact , name="contact"),    
    path('newcar',views.newcar , name="newcar"),  
    path('oldcar',views.oldcar , name="oldcar"),  
    path('upcomingcar',views.upcomingcar , name="upcomingcar"), 
    path('signup',views.handlesignup , name="handlesignup"), 
    path('login',views.handlelogin, name="handlelogin"), 
    path('logout',views.handlelogout , name="handlelogout"), 
    path('insurance',views.insurance , name="insurance"), 

    
]
