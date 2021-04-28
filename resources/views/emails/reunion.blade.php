<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="utf-8" />
  </head>
  <body>
    <div>First Name: {{ $content->first_name }}</div>
    <div>Last Name: {{ $content->last_name }}</div>
    <div>Number of Additional Guests: {{ $content->additional_num }}</div>
    <div>Name(s) of Additional Guests: {{ $content->additional_names }}</div>
    <div>Phone #: {{ $content->phone_number }}</div>
    <div>Email Address: {{ $content->email }}</div>
    <div>Date of Arrival: {{ $content->arrival }}</div>
    <div>Attending Air & Space Museum?: {{ $content->air_and_space }}</div>
    <div>Attending Memorials and Monuments?: {{ $content->memorials_and_monuments }}</div>
    <div>Attending Army Museum?: {{ $content->army_museum }}</div>
    <div>Attending Ladies Breakfast?: {{ $content->ladies_breakfast }}</div>
    <div>Driving?: {{ $content->driving }}</div>
    <div>First Reunion?: {{ $content->first_reunion }}</div>
    <div>Comments: {{ $content->comments }}</div>
  </body>
</html>
