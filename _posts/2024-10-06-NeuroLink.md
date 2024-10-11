---
title: 'NeuroLink: Bridging Weak Signals in Neuronal Imaging with Morphology Learning'
description: 'We introduce the Dynamic Snake Convolution to extract more effective features for the sparse tubular structure of neurons and propose a easily implementable morphology-based loss function to penalize discontinuous predictions.'
author: hao
date: 2024-10-06 00:00:00 +0800
categories: [Conference, MICCAI 2024]
tags: [neuron]
math: true
pin: true
---

### Abstract:

Reconstructing neurons from large-scale optical microscope images is a challenging task due to the complexity of neuronal structures and extremely weak signals in certain regions. Traditional segmentation models, built on vanilla convolutions and voxel-wise losses, struggle to model long-range relationships in sparse volumetric data. As a result, weak signals in the feature space get mixed with noise, leading to interruptions in segmentation and premature termination in neuron tracing results. To address this issue, we propose NeuroLink to add continuity constraints to the network and implicitly model neuronal morphology by utilizing multi-task learning methods. Specifically, we introduce the Dynamic Snake Convolution to extract more effective features for the sparse tubular structure of neurons and propose a easily implementable morphology-based loss function to penalize discontinuous predictions. In addition, we guide the network to leverage the morphological information of the neuron for predicting direction and distance transformation maps of neurons. Our method achieved higher recall and precision on the low-contrast *Zebrafish* dataset and the publicly available BigNeuron dataset. Our code is available at https://github.com/Qingjia0226/NeuroLink.


# Citation

> Yan H, Zhai H, Guo J, Li L, Zhong Y, Du X, Han H (2024). NeuroLink: Bridging Weak Signals in Neuronal Imaging with Morphology Learning. In *Proceedings of Medical Image Computing and Computer Assisted Intervention (MICCAI)*, 467-477. https://doi.org/10.1007/978-3-031-72111-3_44.
>