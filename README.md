zoo-techdata
============

A custom element for ZOO by YOOtheme. Provides a simple way to add a specification table to an item.

## Preface

I assume you already know a bit about ZOO by YOOtheme, at the very least what are **items**, **types** and **elements**, and what is a **custom element**.

## Install

If you want to use it for a specific application, copy the content of the *src* folder into */media/zoo/applications/[APPNAME]/elements/techdata/* folder
If you want to use it globally on your site, copy the content of the *src* folder into */media/zoo/elements/techdata/* folder.

## Usage: element configuration

When you click on "Edit elements" for any of your type, you will find this element in the "Form" group and you can add this element one or more time (please note each element can be defined as "repeatable").
Then, in the element settings, you define the **fields** as a comma separated list, e.g.

NAME, CODE, SIZE, PRICE

If you put a * before any field, that field will only be displayed for registered users.

## Usage: editing

When editing any of your items, you will see a list of input to insert your fields' values. If you defined your element as repeatable, you will be able to insert another series of values (this is the most common usage).

## Display

You can add the element to any of your layout: it will display a regular table with header cellss and data cells. 
If a column has NO data in any of the repetitions, it will be automatically hidden.
And as mentioned before, the field prefixed with * will be hidden if the user is not logged in in your Joomla site.

## Support and contribution
 
This software is given as is, with no support and no responsability. You are still allowed to open issues if you like, but we cannot guarantee a reply.
You're free to fork and use as you wish, as long as you comply with GPL license version 3 or greater. 
We are also glad to accept and evaluate PRs.

