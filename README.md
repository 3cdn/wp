# 🚀 3CDN Platform for Wordpress
A Wordpress plugin that makes your website use the 3CDN Platform.

```
We're still working on our platform and this plugin. It's not recommended to run this plugin until it hits version 1.0.0
```

## Todo
These are things that still need to be done on the plugin's end (which are already part of our platform but should be also handled on your site to avoid funky issues).
- [ ] Only replace URLs if the file does not cross the 25MB mark.
- [ ] Only replace URLs that have the supported file types.
## How it works?
It replaces all `wp-content` URLs on your pages with 3CDN URLs making the client fetch the files from our platform. If the file is not found on our servers, we'll fetch it from your server and then push it to our network.

## What file types does it work with right now?
As of now, the following types are supported: documents, videos, images and audio with more file types coming in the near future. 

## How larges can the files be?
As of now, we only support up to 25MB files. This will change very soon but this gives us time to optimize our platform and make it even better before large files get supported.

## What regions are supported?
We currently have storage nodes in Europe, US-Central and Singapore. But don't worry, 
