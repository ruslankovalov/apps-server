<?php

namespace Ekreative\AppsBundle\Helper;


class Helper {
    
    public static function getPlistString($ipa, $bundleIdentifier, $bundleVersion, $title){
        return '<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE plist PUBLIC "-//Apple//DTD PLIST 1.0//EN" "http://www.apple.com/DTDs/PropertyList-1.0.dtd">
<plist version="1.0">
<dict>
	<key>items</key>
	<array>
		<dict>
			<key>assets</key>
			<array>
				<dict>
					<key>kind</key>
					<string>software-package</string>
					<key>url</key>
					<string>' . $ipa . '</string>
				</dict>
			</array>
			<key>metadata</key>
			<dict>
				<key>bundle-identifier</key>
				<string>' . $bundleIdentifier . '</string>
				<key>bundle-version</key>
				<string>' . $bundleVersion . '</string>
				<key>kind</key>
				<string>software</string>
				<key>title</key>
				<string>' . $title . '-v.' . $bundleVersion . '</string>
			</dict>
		</dict>
	</array>
</dict>
</plist>';
    }
}