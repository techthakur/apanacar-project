from django import http
from django.http.response import HttpResponse
from django.shortcuts import redirect, render
from home.models import Contact, Insurance
from datetime import datetime
from django.contrib import messages
from django.contrib.auth.models import User    # this is signup import models
from django.contrib.auth import authenticate, login, logout


# Create your views here.

def home(request):
    return render(request, "home/home.html")

def about(request):
    return render(request, "home/about.html")

def contact(request):
    if request.method == "POST":
        name = request.POST.get('name')
        email = request.POST.get('email')
        phone = request.POST.get('phone')
        desc = request.POST.get('desc')
        contact =Contact(name=name, email=email, phone=phone, desc=desc, date=datetime.today())


        
        if len(name)<1:
            messages.error(request, ' Please fill the form ! try Again')
            return redirect('contact')
        
        if len(name)<3:
            messages.success(request, ' Your name is to Smaller ! Please try Again')
            return redirect('contact')

        if len(name)>20:
            messages.success(request, ' Your name is to long ! Please try Again')
            return redirect('contact')

        if len(phone)<5:
            messages.success(request, 'Your phone number is to Smaller ! Please try Again')
            return redirect('contact')

        if len(phone)>13:
            messages.success(request, 'Your phone number is to long ! Please try Again')
            return redirect('contact')

        if len(desc)<4:
            messages.success(request,    ' Please fill More  Contant ! in Description ')
            return redirect('contact')
            

        contact.save()
        messages.success(request, ' Your message has been sent! ')
    return render(request, "home/contact.html")







def newcar(request):
    return render(request, "home/newcar.html")



def oldcar(request):
    return render(request, "home/oldcar.html")




def upcomingcar(request):
    return render(request, "home/upcomingcar.html")



















def handlesignup(request):
    if request.method == "POST":
        username = request.POST['username']
        fname = request.POST['fname']
        lname = request.POST['lname']
        email = request.POST['email']
        pass1 = request.POST['pass1']
        pass2 = request.POST['pass2']




        # check user name
        if len(username)<1:
            messages.success(request,    ' Please fill the form ! Try Again ')
            return redirect('home')


        if len(username)>15:
            messages.success(request,    'Take Username is under 15 characters! Please Try Again ')
            return redirect('home')

        if len(username)<4:
            messages.success(request,    ' Your Username is to Smaller! Please Try Again ')
            return redirect('home')
            
        if not username.isalnum():
            messages.success(request,    ' Take Username Only letter or number ! Please Try Again ')
            return redirect('home')



        # check first name 
        if len(fname)>15:
            messages.success(request,    ' Your First name is to Long ! Please Try Again ')
            return redirect('home')
        

        if len(fname)<2:
            messages.success(request,    ' Your First name is to Smaller ! Please Try Again ')
            return redirect('home')
        

        


        # check Last Name
        if len(lname)>15:
            messages.success(request,    ' Your Last Name is to Long ! Please Try Again ')
            return redirect('home')
        

        if len(lname)<2:
            messages.success(request,    ' Your Last name is to Smaller ! Please Try Again ')
            return redirect('home')

        
        # check password
        if len(pass1)<4:
            messages.success(request,    ' Your Password is to week  ! Please Try Again ')
            return redirect('home')





        if pass1 != pass2:
            messages.success(request,    ' Your Password is does not  match ! Please Try Again ')
            return redirect('home')


        myuser = User.objects.create_user(username,email,pass1)
        myuser.first_name = fname
        myuser.last_name = lname
        myuser.save()
        messages.success(request, ' Your Account has been created successfully !')
        return redirect('home')

    
    else:

        return HttpResponse("  error  404 ")


    












def handlelogin(request):
    if request.method == "POST":
        loginuser = request.POST['loginuser']
        loginpass = request.POST['loginpass']
        user = authenticate(username=loginuser , password = loginpass)

        if len(loginuser)<1:
            messages.success(request, ' Please fill the form ! try again ')
            return redirect('home')


        if user is not None:
            login(request,user)
            messages.success(request, 'you are successfully logged in ')
            return redirect('home')

        else:
            messages.success(request, 'invalid username or password ! Please Try Again ')
            return redirect('home')

    return HttpResponse(" error  404 ")










def handlelogout(request):
    logout(request)
    messages.success(request, ' you are successfully logged out ')
    return redirect('home')

#return HttpResponse(" logout")                 # any body come direct logout page. not any problem. 
                                                # beacuse this logout page. so here will not used HttpResponse


  













def insurance(request):
    if request.method == "POST":
        name = request.POST.get('name')
        carnumber = request.POST.get('carnumber')
        phone = request.POST.get('phone')
        insurance = Insurance(name=name, carnumber=carnumber , phone= phone, date = datetime.today())
        
        if len(name)>20:
            messages.success(request, 'your name is to large, Please Try Again ')
            return redirect('/insurance')

        if len(name)<2:
            messages.success(request, 'your name is to small, Please Try Again ')
            return redirect('/insurance')




        if len(carnumber)>13:
            messages.success(request, 'your car number is to large, Please Try Again ')
            return redirect('/insurance')
        
        if len(carnumber)<4:
            messages.success(request, 'your car number is to small, Please Try Again ')
            return redirect('/insurance')



        if len(phone)>13:
            messages.success(request, 'your phone number  is to large, Please Try Again ')
            return redirect('/insurance')

        if len(phone)<5:
            messages.success(request, 'your phone number  is to small, Please Try Again ')
            return redirect('/insurance')
    
        insurance.save()
        messages.success(request, ' Your message has been sent! ')
    return render(request, "home/insurance.html") 








