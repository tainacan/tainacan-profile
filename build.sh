echo "Compiling necessary stuff..."
cd ./tainacan-profile
npm install
npm run build
cd ../

if [ -z "$1" ]
then
    echo "Done!"
else
    echo "Done. Moving files to destination folder: $1"
    rm -rf $1/tainacan-profile
    cp -r ./tainacan-profile $1
    echo "Cleaning some files not necessary for the plugin to work..."
    rm -f $1/tainacan-profile/package.json
    rm -f $1/tainacan-profile/package-lock.json
    rm -rf $1/tainacan-profile/node_modules
    rm -rf $1/tainacan-profile/src
    echo "Done!"
fi