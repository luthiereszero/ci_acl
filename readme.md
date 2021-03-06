**Caution:** This repository will be changing name shortly to "*licentia*", so it fits in with my normal project codename convention.
# CodeIgniter Access Control List
This is yet another ACL implementation for [CodeIgniter](http://ellislab.com/codeigniter). More specifically this is a role-based access control list for CodeIgniter.

It follows this basic model:

	   +----+
	   |user|+- - - - - - - -+         +---------+
	   +----+                -    a --+|user_role|+--
	     +                   -         +---------+
	     |                   -
	   a |                   -
	     +                   +         +---------+
	   +----+      b      +----+  b --+|role_perm|+--
	   |role|+-----------+|perm|       +---------+
	   +----+             +----+
	
	
	   Key
	   ========================
	   ----+  one-to-many
	   -----  one-to-one
	   - - -  indirect relation

This can also be described using some basic set theory:

	u  = user
	r  = role
	p  = perm
	ua = user assignment
	pa = perm assignment
	
	ua ⊆ u × r
	pa ⊆ p × r

<del>This implementation uses numerical values (2^n) for the permissions (don't worry the database schema still stores wordy versions of each permission), and bitwise operations to check that a user has the needed permissions to perform a given action.</del> (not right now but may in the future)

The system also does not account for users having permissions directly but instead forces a user to be assigned at least one role.

At this current time there are no plans to allow users to have roles independent of roles, however there are plans to have role hierarchy using the following logic:

	rh = role hierarchy
	
	rh ⊆ r × r
	
## Usage
To use this system you will need to ensure that you have at least the minimum required fields in your database schema, and you will need to add both the ci_acl model, and ci_acl library to your CodeIgniter setup.

### Minimum Database Requirements
The table names can be changed within the `application/config/acl.php` file.

	   +-----------+
	   |user       |
	   |-----------|
	   |user_id    <--+
	   +-----------+  |
	                  |
	   +-----------+  |
	   |user_role  |  |
	   |-----------|  |
	   |user_id    +--+
	+--+role_id    |
	|  +-----------+
	|
	|  +-----------+                           +-----------+
	|  |role       |                           |perm       |
	|  |-----------|       +-----------+       |-----------|
	+-->role_id    <---+   |role_perm  |   +--->perm_id    |
	   |name       |   |   |-----------|   |   |name       |
	   |description|   +---+role_id    |   |   |description|
	   |slug       |       |perm_id    +---+   |slug       |
	   +-----------+       +-----------+       +-----------+

The schema for these tables as defined above can be found in `acl_schema.sql`, this contains extra information such as field types, and primary keys. The schema provided, along with the example usage also come with a basic user login. This aids in testing, as well as sets a ground work for you to build on in your own CodeIgniter applications. 

**NB:** You will probably want to beef up the security on the user login a little for a production system. The login system provided is much more basic, and for example usage. The ACL provided is **JUST** the permissions and role structure.

## License
All code in this project is subject to the terms of the [Mozilla Public License, v. 2.0](http://mozilla.org/MPL/2.0/) except where otherwise noted.

## ChangeLog
### 2012.12.30
Model refined, and tweaked slightly. User interface started. Released as version **0.2**

* added basic UI to manage ACL
* tweaked model to use slugs instead of numerical values
* removed the acl library due to it no longer being needed

Next version
* project name change
* complete UI
* basic installer

### 2012.12.23
First major changeset. Released as version **0.1**.

* added core files
* added high level documentation
* added basic logic needed for model functionality

Next version:

* start work on the ACL library methods
* create basic UI to manage role + permissions
* porject name change