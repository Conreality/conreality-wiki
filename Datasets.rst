For object detection purposes we need databases that are intented for
object detection, **not** image classification. Generally when looking
for usable datasets anything goes as long as it fills the following
requirements:

-  Has relevant objects
-  Has annotations for objects, meaning ID, X, Y, width, and height in
   the image

Some popular datasets:

-  `PASCAL VOC <http://host.robots.ox.ac.uk/pascal/VOC/index.html>`__
   A popular general use dataset. Darknet has configuration
   files and a guide for using it. 20 classes + person layout (hands,
   heads, feet) + image segmentation.
-  `COCO Common Objects in Context <http://cocodataset.org/#home>`__
   Bigger dataset than PASCAL. Darknet has configuration files and a
   guide for it. 80 classes + image segmentation.
-  `CIFAR-10 and CIFAR-100 <https://www.cs.toronto.edu/~kriz/cifar.html>`__
   CIFAR-10 has 60000 images for 10 classes and CIFAR-100 has 60000
   images for 100 classes. Darknet has documentation.
-  `ImageNet <http://www.image-net.org/>`__
   Large dataset of 57GB. Annotation format is the same as PASCAL VOC.
   200 classes.
-  `Tiny ImageNet <https://tiny-imagenet.herokuapp.com/>`__
   A tiny ImageNet. 200 classes with only 600 images for each.

To work with most datasets you need to write a script to get an
annotation format acceptable by your neural network. Darknet has a script
to read the xml annotation format of PASCAL VOC. 

`Kaggle <https://www.kaggle.com/datasets>`__ has datasets for many
topics. Malleability for a specific purpose is likely poor.

https://en.wikipedia.org/wiki/List_of_datasets_for_machine_learning_research
https://archive.ics.uci.edu/ml/datasets.html
