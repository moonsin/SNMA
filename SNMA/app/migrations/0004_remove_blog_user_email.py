# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import models, migrations


class Migration(migrations.Migration):

    dependencies = [
        ('app', '0003_auto_20151029_2042'),
    ]

    operations = [
        migrations.RemoveField(
            model_name='blog_user',
            name='email',
        ),
    ]