# Firequent (beta)
Laravel Eloquent for Firestore.

## Overview
Firequent is a Laravel Eloquent version modified to work with Google Firestore inside Google App Engine. Firestore got the capacity to handle very high loads, and it's very fast but it offers much fewer features than traditional SQL databases.

## Known limitations
- No incremental IDs. Instead random integer in range 1000000000000000 to 9007199254740991 ([reason](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Number/MAX_SAFE_INTEGER))
- Firestore is NoSQL database so no schemas/migrate support.
- Only simple where() queries ([more info](https://firebase.google.com/docs/firestore/query-data/queries))
- No relationships support (soon!)
- No pagination (you should avoid using count() as counting is not supported by Firestore)
- [Learn more](https://www.youtube.com/watch?v=v_hR4K4auoQ&list=PLl-K7zZEsYLluG5MCVEzXAQ7ACZBCuZgZ)

## Usage
- Activate Firestore in you Google console (native mode)
- Inside your model file replace `use Illuminate\Database\Eloquent\Model;` with `use Firevel\Firequent\Model;`
- If you are running your app outside Google App Engine, you will need to set GOOGLE_APPLICATION_CREDENTIALS in your .env file ([more](https://cloud.google.com/docs/authentication/getting-started#setting_the_environment_variable))
- Firestore is a NoSQL database, and it doesn't need migrations. Schemas are automatically generated from attributes.
