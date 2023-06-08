# Real-Estate-Portal-

## A real estate portal is an online medium where anyone can list properties for sale through their site's backend. 
> To develope that portal i implement following table and database . In homeland databse
> ### *User table* it  contain Id field, Username field, email field, password field, time field 
>>1. _Id_ of authorized user
>>2. _User_name_ fo the user
>>3. _email_ email of the user
>>4. _password_ it conatin using hash function

![image](https://github.com/RaagLibr/Real-Estate-Portal-/assets/101311420/fc1e4ecb-2d37-4e10-b0b4-d6e60f45aa2e)


> ### *request table* it contain the requeste property of user to buy it contain following fields
>>1. _Id_ of requested property
>>2. _Name_ of the person who want to buy it
>>3. _Phone_ number of the buyer
>>4. _Prop_id_ it contain property id from properties table
>>5. _user_id_ it is auto field and it contain the user id who requested for the property.
>>6. _author_  it is auto field contains the name of the property owner by default.
>>![image](https://github.com/RaagLibr/Real-Estate-Portal-/assets/101311420/f264b2d9-0751-4327-a0d3-2a3f7979e330)



> ### *related image * table , it contain the related image of that property to show the same propery are available or not

>>1. _Id_ of requested property
>>2. _image_ of the related property
>>3. _property id_ contain the related property id
![image](https://github.com/RaagLibr/Real-Estate-Portal-/assets/101311420/20edba5f-06d4-4a7c-9d73-baee7b69a014)



> ### * prop * table , it contain the related image of that property to show the same propery are available or not

>>1. _Id_ is id of property
>>2. _name_ is name of the  property
>>3. _property id_ contain the related property id
>>4. _location_ it contain location of the property
>>5. _price_ cost of the property
>>6. _image_ some images of the property
>>7. _bath_ washrooms in the home
>>8. _beds_ how many bed rooms in home
>>9. _sq_ft_ size of property 
>>10. _type_home_ type of home
>>11. _year_build_ when it get build
>>12. _type_ home type
>>13. _price_sqfit_ price per square fit
>>14. _description_ it contain information regarding to the property
>>15. _admin_name_ it conain admin name who has the access of those properties.
![image](https://github.com/RaagLibr/Real-Estate-Portal-/assets/101311420/49691ace-0baf-4e30-9729-c0563b2c9a4f)

> ### * faves * table , it contain the favourite properties of users .

>>1. _Id_ is id of favourite property
>>2. _proper_id_ is id of the  property
>>3. _user_id_ conain the id of user took form the user table 
![image](https://github.com/RaagLibr/Real-Estate-Portal-/assets/101311420/13008564-883a-40a6-8a44-607d0d7025f6)


> ### * categories * table , it contain the categories of that property.

>>1. _Id_ is id of category
>>2. _name_ is name of the  category
>>3. _created_at_ contain the time when the categories get added
![image](https://github.com/RaagLibr/Real-Estate-Portal-/assets/101311420/ccb7d0cf-9c46-4c89-8ac1-18bafa1c3c7f)


> ### * admin * table , it contain the admin information

>>1. _Id_ is id of admins
>>2. _adminname_ is name of the  admin
>>3. _email_ contain the email id of admin
>>4. _password_ it contain password of the password

![image](https://github.com/RaagLibr/Real-Estate-Portal-/assets/101311420/94f46990-f559-474e-92b3-5520a79e113b)



