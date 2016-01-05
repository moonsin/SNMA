# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import models, migrations


class Migration(migrations.Migration):

    dependencies = [
        ('app', '0002_auto_20151025_2028'),
    ]

    operations = [
        migrations.AddField(
            model_name='blog_user',
            name='Sina',
            field=models.CharField(default=b'fuck', max_length=16),
        ),
        migrations.AddField(
            model_name='blog_user',
            name='qq',
            field=models.IntegerField(default=110),
        ),
        migrations.AddField(
            model_name='blog_user',
            name='wechat',
            field=models.IntegerField(default=110),
        ),
        migrations.AlterField(
            model_name='blog_user',
            name='firstname',
            field=models.CharField(default=b'fuck', max_length=16),
        ),
        migrations.AlterField(
            model_name='blog_user',
            name='lastname',
            field=models.CharField(default=b'you', max_length=16),
        ),
        migrations.AlterField(
            model_name='blog_user',
            name='phoneNumber',
            field=models.IntegerField(default=110),
        ),
        migrations.AlterField(
            model_name='blog_user',
            name='photo',
            field=models.ImageField(default=b'upload_imgs/user-1.jpg', upload_to=b'upload_imgs/'),
        ),
    ]
