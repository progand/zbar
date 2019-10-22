## Development

```php
php -S localhost:8000
```

### Routing

In order to open url

```
/gallery/4.html
```

translate it to

```
/index.php?action=gallery&parameter=4
```

## Images

### Sizes constraits

Medium: 800px x 640px

Small: 160px x 160px

### Convert images

### Single image

To resize an image, issue this command:

```sh
convert -resize 160×160 input.JPG output-resized.JPG
```

### Multiple images

Convert all JPG images in current directory to `small` or `meduim` format and place them in `/small` or `medium` subdirectory:

```sh
mogrify -path small -auto-orient -thumbnail 160x160 '*.JPG'
mogrify -path medium -auto-orient -thumbnail 800x640 '*.JPG'
```

### Add images

1. Place all your original images to one folder
2. Open terminal in the folder
3. Add `small` or `meduim` subfolders:

    ```sh
    mkdir small && mkdir medium
    ```

4. Produce small and medium images

	```sh
	   mogrify -path small -auto-orient -thumbnail 160x160 '*.JPG'
	   mogrify -path medium -auto-orient -thumbnail 800x640 '*.JPG'
	```

5. Copy produced images to appropriate `/galleries/` subfolders and add their data to `db/images.json` 
