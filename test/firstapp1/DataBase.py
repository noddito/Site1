from .models import *


def get_material():
    tasks = Tasks.objects.all()
    return tasks