# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import models, migrations
from django.conf import settings


class Migration(migrations.Migration):

    dependencies = [
        migrations.swappable_dependency(settings.AUTH_USER_MODEL),
    ]

    operations = [
        migrations.CreateModel(
            name='Blog',
            fields=[
                ('id', models.AutoField(verbose_name='ID', serialize=False, auto_created=True, primary_key=True)),
                ('title', models.CharField(max_length=64)),
                ('summary', models.CharField(max_length=200, null=True, blank=True)),
                ('content', models.TextField()),
                ('category', models.CharField(max_length=64)),
                ('view_counts', models.IntegerField()),
                ('update_at', models.DateField(auto_now=True)),
            ],
        ),
        migrations.CreateModel(
            name='Blog_user',
            fields=[
                ('id', models.AutoField(verbose_name='ID', serialize=False, auto_created=True, primary_key=True)),
                ('phoneNumber', models.IntegerField()),
                ('signature', models.CharField(default=b'This lazy gay is too lazy to leave any thing:)', max_length=128)),
                ('photo', models.ImageField(upload_to=b'upload_imgs/')),
                ('firstname', models.CharField(max_length=16)),
                ('lastname', models.CharField(max_length=16)),
                ('email', models.EmailField(max_length=254)),
                ('name', models.OneToOneField(to=settings.AUTH_USER_MODEL)),
            ],
        ),
        migrations.AddField(
            model_name='blog',
            name='author',
            field=models.ForeignKey(to='app.Blog_user'),
        ),
    ]
