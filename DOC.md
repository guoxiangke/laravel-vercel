DOC.md
# log and tmp
https://github.com/vercel-community/php/issues/140#issuecomment-761867702
	There is only 1 writable folder, /tmp. You should change log directory, to the /tmp folder.


## Unable to create lockable file: /var/task/user/storage/framework/cache/data/31/f9/31f930cc1bc2882a18958bee5f8ccae60ba9492f. Please ensure you have permission to create files in this location.
	CACHE_DRIVER=array/database/redis
	default:"LOG_CHANNEL": "stack/stderr/single/", 

## SQLSTATE[08006] [7] ERROR: Endpoint ID is not specified. Either please upgrade the postgres client library (libpq) for SNI support or pass the endpoint ID (first part of the domain name) as a parameter: '?options=endpoint%3D<endpoint-id>'. See more at https://neon.tech/sni
ERROR: connection is insecure (try using `sslmode=require`) (Connection: pgsql, SQL: select * from "users" where "email" = 
https://neon.tech/docs/connect/connectivity-issues

## TypeError

#LOG_CHANNEL=stack
CACHE_DRIVER=array
APP_ENV=local
APP_KEY=base64:6ur5gs8i34=
APP_DEBUG=true


pdo_pgsql=10.21
'sslmode' => 'require',
'sslmode' => 'preferl',//verify-ful/require

SQLSTATE[08006] [7] root certificate file "/home/sbx_user1051/.postgresql/root.crt" does not exist
Either provide the file or change sslmode to disable server certificate verification. 
