<?php /* #?ini charset="utf-8"?

[InfoSettings]
# Matches class id or identifier to information collection type
TypeList[wedding_rfp_form]=wedding_rfp_form
TypeList[contact_form]=contact_form
TypeList[meeting_rfp_form]=meeting_rfp_form

[EmailSettings]
# Matches class id or identifier to information collection type
SendEmailList[wedding_rfp_form]=enabled
SendEmailList[contact_form]=enabled
SendEmailList[meeting_rfp_form]=enabled

[DisplaySettings]
# result - Display IC result, for instance poll result or your form data
# redirect - Redirect to a specific url
# node - Redirect back to content node
# Matches class id or identifier to information collection type
#DisplayList[poll]=result
DisplayList[wedding_rfp_form]=result
DisplayList[contact_form]=result
DisplayList[meeting_rfp_form]=result

[CollectionSettings]
# if enabled then information from anonymous users can be collected
# CollectAnonymousData=enabled
# Same as CollectAnonymousData but is a list of IC types and
# their override settings, if specified it will override default setting
CollectAnonymousDataList[wedding_rfp_form]=enabled
CollectAnonymousDataList[contact_form]=enabled
CollectAnonymousDataList[meeting_rfp_form]=enabled

# How information collection is handled in terms of user identification
#
# multiple - each user can submit multiple data
# unique - one set of data per user, if already exists give a warning
# overwrite - one set of data per user but new entry overwrites old one
CollectionUserData=multiple
# Matches class id or identifier to information collection type
CollectionUserDataList[wedding_rfp_form]=multiple
CollectionUserDataList[contact_form]=multiple
CollectionUserDataList[meeting_rfp_form]=multiple

*/ ?>
