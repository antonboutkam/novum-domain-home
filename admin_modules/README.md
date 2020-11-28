# Admin modules 
<p align="center"><img src="https://gitlab.com/NovumGit/innovation-app-core/-/raw/master/assets/twig-logo.png"  alt="Novum logo"/></p>


## Summary
This directory will contain the presentation code of whatever you will see in the admin panel.
Code is organised in ```modules```, each module lives in it's own directory. A module is made
up out of ```models```. Role based access is by default managed on the level of ```modules```. 

## Included
For each ```model``` an overview and an ```edit``` view is generated. You can customize whatever 
you see and create additional forms or panels to make adjustments when needed.

### Base vs custom
Actually two classes are generated for both types. The first of both 
is there for developers to edit, this is basically an empty class that extends the latter. Whenever the datamodel 
changes only the Base version is updated so your custom code will remain in place and should keep on working unless
you applied some breaking changes that require updating your uwn custom code.


Documentation: [Symfony Twig template engine](https://twig.symfony.com/)