
from django.shortcuts import render
from django.views import View
from .DataBase import *
from django.http import HttpResponse


class indexM(View):
    def get(self, request):
        tasks = get_material()
        context = {
            'tasks': tasks
        }
        return render(request, 'index.html', context=context)





