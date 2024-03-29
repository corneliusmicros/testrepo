<?php /* #?ini charset="utf-8"? 

#Settings for ezcomcomments datatype
[GlobalSettings]

#If comments are shown by default
#This setting only affects the case that 'shown' is not set by administrator, typically adding ezcomments into a new/existing class.
DefaultShown=true

#If the commenting is enabled in object attribute by default.
#This setting only affects the case that 'enabled' is not set by administrator, typically adding ezcomments into a new/existing class.
DefaultEnabled=true

#If the notification is selected by default
EnableNotification=false

#Default embeded comment count in content view
DefaultEmbededCount=8

#Embeded comment sort field in content view
DefaultEmbededSortField=created

#Embeded comment sort order in content view
DefaultEmbededSortOrder=desc

#Settings for notification related
[NotificationSettings]
#notification manager class
NotificationManagerClass=ezcomNotificationEmailManager

#number of items on comment setting page
NumberPerPage=8

#length of subscriber hash string
SubscriberHashStringLength=32

MailContentType=text/html
MailFrom=noreply@ez.no

ActivationMailContentType=text/html

#Make all the updated comment in one notification
CommentsInOne=false

#Number per cronjob executation
NotificationNumberPerExecuation=10

#Expire day of subscription activation, after which if the subscription has not been activated, it will be deleted.
#-1 means never cleaning up. Formats like 0.5(12 hours)/0.25(6 hours) are possible
DaysToCleanupSubscription=20

#Settings for comment list, commenting
[CommentSettings]

#Number of comments per page in comment list, -1 means not paging
NumberPerPage=10

DefaultSortField=created

DefaultSortOrder=asc

#By default if the notified is checked 
DefaultNotified=true

#By default if the subscription is activated, if not, execute the activiation process
SubscriptionActivated=false

#Class for handling logic
[ManagerClasses]
CommentManagerClass=ezcomCommentCommonManager
SubscriberManagerClass=ezcomSubscriptionManager
PermissionClass=ezcomPermission
AddCommentToolClass=ezcomAddCommentTool
EditCommentToolClass=ezcomEditCommentTool

[FormSettings]
FormHandlerClass=ezcomFormTool
AvailableFields[]
AvailableFields[]=title
AvailableFields[]=name
AvailableFields[]=website
AvailableFields[]=email
#The comment field can not be deleted!
AvailableFields[]=comment
AvailableFields[]=notificationField

[title]
Required=false
PostVarName=CommentTitle
AttributeName=title

[name]
Required=true
PostVarName=CommentName
AttributeName=name

[website]
Required=false
PostVarName=CommentWebsite
AttributeName=url

[email]
Required=true
PostVarName=CommentEmail
AttributeName=email

[comment]
Required=true
PostVarName=CommentContent
AttributeName=text

[notificationField]
Required=false
PostVarName=CommentNotified
*/
?>
