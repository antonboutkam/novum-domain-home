# Crud classes 
<p align="center"><img src="https://gitlab.com/NovumGit/innovation-app-core/-/raw/master/assets/novum.png"  alt="Novum logo"/></p>

## Summary
When you alter the datamodel, code is generated to reflect the state of your model. The code inside this directory 
provides an abstraction layer above the actual datamodel. Each ```model``` in the datamodel will be represented here by 
a ```manager``` class and each field will be represented by a ```field``` class. 

#### Base vs custom
Actually two classes are generated for both types. The first of both 
is there for developers to edit, this is basically an empty class that extends the latter. Whenever the datamodel 
changes only the Base version is updated so your custom code will remain in place and should keep on working unless
you applied some breaking changes that require updating your uwn custom code.


## Reasoning
- This abstraction layer allows for the addition of virtual columns easily.
- Specific data validation rules, not natively supported by the database are applied on this layer. 
- This structure allows for generating views, managing queries etc in a more flexible way.
- Event handling is done here so the models purely focus on storing and retrieving data.
- Presentation is done here.

## Included
Some additional fields are automatically added upon generation. 
