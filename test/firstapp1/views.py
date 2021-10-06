
from django.shortcuts import render
from django.views import View
from django.http import HttpResponse
#from .base import *

class index(View):
    def get(self,requset):
        context = {}
        return render(requset, 'index.html',context=context)
class MaterialPage(View):
    def get(self,requset):
        context = {}
        return render(requset, 'index.html',context=context)

class ServicePage(View):
    def get(self, requset):
        context = {}
        return render(requset, 'index.html', context=context)


# Create your views here.
