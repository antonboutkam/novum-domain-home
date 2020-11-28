# Models 
<p align="center"><img src="https://gitlab.com/NovumGit/innovation-app-core/-/raw/master/assets/propel-orm-logo.png"  alt="Novum logo"/></p>

## Summary
When you alter the datamodel, code is generated to reflect the state of your model. The code inside this directory 
manages the data storage / searching and retrieving on the database level. The Propel ORM is used and their 
documentation is fine so please check their website for details.

#### Files generated
Each ```model``` in the datamodel will be represented here by a ```Model``` class and a ```ModelQuery``` class. 
The  ```model``` is responsible for managing records / unique items while the Query class is there for collections, 
searching etc

#### Base vs custom
Actually two classes are generated for both types. The first of both 
is there for developers to edit, this is basically an empty class that extends the latter. Whenever the datamodel 
changes only the Base version is updated so your custom code will remain in place and should keep on working unless
you applied some breaking changes that require updating your uwn custom code.

