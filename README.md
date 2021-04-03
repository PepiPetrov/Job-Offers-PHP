# Job Offers

This is a simple site, made with PHP and MySQL. 
The site is a simplified version of jobs.bg

## Setup
You need XAMPP (Apache Server and MySQL)
You should create a databse, named `jobs`
For the structure of the database, see the file `jobs.sql`

## Functionality

This site has a landing page. There you can find all the offers.
You can also offers search by profession. Just write the full name of the profession.
For example, if you search offers for System Administration just write `System Administration`.

### Adding offers

You should fill in all the fields (There is no validation, if you want to skip one field).
If the request was succesfull, you will be redirected to the details page for that offer.

### Administration panel

The administration panel will contain your offers.

#### Editing offers

When you go to the editor page, the fields will be auto-filled with the values for that offer.
If the request was succesfull, you will be redirected to the details page for the edited offer.

### Pagination

Pagination is avialable on the landing page and the administration panel.

### The app has authentication.
