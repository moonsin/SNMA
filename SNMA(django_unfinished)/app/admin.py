from django.contrib import admin
from app import models
# Register your models here.


class Blog_admin(admin.ModelAdmin):
    list_display = ('title','summary','author','signature','view_count','created_at')
    list_filter = ('created_at',)
    search_fields = ('title','author__user__username',)

    def signature(self,obj):
        return obj.author.signature
    
admin.site.register(models.Blog)
#admin.site.register(models.Category)
admin.site.register(models.Blog_user)