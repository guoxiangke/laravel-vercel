DOC.md
# log and tmp
https://github.com/vercel-community/php/issues/140#issuecomment-761867702
	There is only 1 writable folder, /tmp. You should change log directory, to the /tmp folder.


## Unable to create lockable file: /var/task/user/storage/framework/cache/data/31/f9/31f930cc1bc2882a18958bee5f8ccae60ba9492f. Please ensure you have permission to create files in this location.
	CACHE_DRIVER=array/database/redis
	default:"LOG_CHANNEL": "stack/stderr/single/", 