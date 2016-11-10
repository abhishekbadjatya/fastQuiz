#! bin/bash

TESTSCRIPT=$(./vendor/bin/phpunit --stderr)
if [ $? == 0 ]; then
	echo "All tests passed"
	cd ../..
	GITCMD=$(git add *)
	GITCOMMIT=$(git commit -m"$1")
	GITPUSH=$(git push origin develop)

	
else
	echo "Failed"
fi
