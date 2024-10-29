---
title: About Me
icon: fas fa-address-card
order: 4
math: true
---

[![Google Scholar Link](https://img.shields.io/badge/Google_Scholar-Hao_Zhai-lightgray?style=for-the-badge&logo=googlescholar)](https://scholar.google.com/citations?user=1fcT9g8AAAAJ&view_op=list_works&sortby=pubdate)
[![ORCiD Link](https://img.shields.io/badge/ORCiD-0000--0003--4149--3131-lightgray?style=for-the-badge&logo=orcid)](https://orcid.org/0000-0003-4149-3131)

## Experience

- Ph.D. Candidate, Key Laboratory of Brain Cognition and Brain-inspired Intelligence Technology, Institute of Automation, Chinese Academic of Sciences ([CASIA](https://ia.cas.cn/)), right now (expected in 2025).
    - Advisor: [Prof. Dr. Hua Han](https://people.ucas.ac.cn/~hanhua)
    - Collaborators: [Yanchao Zhang](https://github.com/yanchaoz), [Jinyue Guo](https://github.com/fenglingbai), [Haiyang Yan](https://github.com/Qingjia0226), [Dr. Jing Liu](https://github.com/MiRA-lab-dev)
- B.Eng., University of Science and Technology Beijing ([USTB](https://en.ustb.edu.cn/)), in 2020.

## Works

- **Foundation Models** *for Connectomics* (2023-present)
    - Segment Anything (SAM) 2D-to-3D distillation for neuron segmentation <sup>1</sup>
    - Pretraining and finetuning the generalist models for neuron segmentation <sup>2</sup>
- **Connectome Projects** *of Different Specimens* (2020-present)
    - **Mouse whole suprachiasmatic nucleus** ($$\textbf{88.3} \space \textrm{T}vx$$, 5$$\times$$5$$\times$$40 $$\textrm{nm}^3$$)$$\enspace\bullet\enspace$$**Second Author**, *contributions: large-scale parts list (neuron, nucleus/soma, mito, synapse, axon fascicles, blood vessels) reconstruction, neuroglancer-based annotation tools, the soma-soma contact network*
    - **Zebrafish (larval) whole brain** ($$\textbf{103.4} \space \textrm{T}vx$$, 4$$\times$$4$$\times$$33 $$\textrm{nm}^3$$)$$\enspace\bullet\enspace$$**Contributing Author**, *contributions: semi-automated **APEX2**-labeled neuron tracing, SAM-based proofreading tools*
    - ***Drosophila* lobula** with labeled LC12 neurons ($$\textbf{1.63} \space \textrm{T}vx$$, 3$$\times$$3$$\times$$50 $$\textrm{nm}^3$$)$$\enspace\bullet\enspace$$**First Author**, *contributions: parts list (neuron, mito, synapse) reconstruction, comparative analysis (together with FlyWire, Hemi-Brain, Optic-Lobe) of **HRP**-labeled LC12 neurons*
- **Generic Object Tracking and Segmentation** *for Various Modalities* (2020-2023)
    - **EM**: neuron tracking assisted by mitochondria and synaptic clefts <sup>5</sup>
    - **LM**: neuron (weak signals) tracking with a morphology loss <sup>3</sup>
    - **Video**: animal tracking and pose estimation for behavior analysis <sup>6,7</sup>

## Plans

- **Foundation Models for Connectomics**
    - Pretraining generalist models$$\enspace\bullet\enspace$$*Based on Publications 2*
    - Distillation into small/specialized models$$\enspace\bullet\enspace$$*Based on Publications 1*
    - GPU-accelerated models for **connectome projects** ([ORT](https://onnxruntime.ai/) or [JAX](https://jax.readthedocs.io/en/latest/index.html))
- **Long-range (Semi-) Automated Neuron Reconstruction**
    - Semi-automated tracing with promptable segmentation$$\enspace\bullet\enspace$$*Based on Publications 1, 4*
    - Automated proofreading with priors on overall neuron shape (from both LM and EM)$$\enspace\bullet\enspace$$*Based on Publications 3*
- **Connectome Projects from the Mouse Hypothalamus**
    - Connectomic analysis of other regions in the mouse hypothalamus$$\enspace\bullet\enspace$$*Based on Our Mouse SCN Project*

## Publications

**(Co-) First Author**

1. **Zhai H**, **Guo J**, **Zhang Y**, Liu J, Han H (2024). [SAvEM$^3$: Pretrained and Distilled Models for General-purpose 3D Neuron Reconstruction](https://jackiezhai.github.io/posts/SAvEM3/). In ***Proceedings of IEEE International Conference on Bioinformatics and Biomedicine (BIBM)***. accepted.
2. **Zhang Y**, **Guo J**, **Zhai H**, Liu J, Han H (2024). [SegNeuron: 3D Neuron Instance Segmentation in Any EM Volume with a Generalist Model](https://jackiezhai.github.io/posts/SegNeuron/). In ***Proceedings of Medical Image Computing and Computer Assisted Intervention (MICCAI)***, [589-600](https://doi.org/10.1007/978-3-031-72111-3_55).
3. **Yan H**, **Zhai H**, Guo J, Li L, Zhong Y, Du X, Han H (2024). [NeuroLink: Bridging Weak Signals in Neuronal Imaging with Morphology Learning](https://jackiezhai.github.io/posts/NeuroLink/). In ***Proceedings of Medical Image Computing and Computer Assisted Intervention (MICCAI)***, [467-477](https://doi.org/10.1007/978-3-031-72111-3_44).
4. **Zhang Y**, **Zhai H**, Guo J, Liu J, Han H (2024). [Selective Labeling Meets Semi-Supervised Neuron Segmentation](https://jackiezhai.github.io/posts/SL-SSNS/). ***bioRxiv***, [2024.05.26.595303v1](https://www.biorxiv.org/content/10.1101/2024.05.26.595303v1), submitted.
5. **Zhai H**, Liu J, Hong B, Liu J, Xie Q, Han H (2024). [Intra-and Inter-Cellular Awareness for 3D Neuron Tracking and Segmentation in Large-Scale Connectomics](https://jackiezhai.github.io/posts/II-CATS/). In ***Proceedings of Machine Learning Research***, [*227*, 1691–1712](https://proceedings.mlr.press/v227/zhai24a.html).
6. **Zhai H**, **Yan H**, Zhou J, Liu J, Xie Q, Shen L, Chen X, Han H (2024). [InteBOMB: Integrating generic object tracking and segmentation with pose estimation for animal behavioral analysis](https://jackiezhai.github.io/posts/InteBOMB/). ***Zoological Research***, minor revision.
7. **Chen X**, **Zhai H**, Liu D, Li W, Ding C, Xie Q, Han H (2021). [SiamBOMB: a real-time AI-based system for home-cage animal tracking, segmentation and behavioral analysis](https://jackiezhai.github.io/posts/SiamBOMB/). In ***Proceedings of  International Joint Conference on Artificial Intelligence (IJCAI),*** [5300-5302](https://www.ijcai.org/proceedings/2020/776).

**Contributing Author**

* **Liu J**, **Yu J**, **Shen L**, **Chen X**, **Ma L**, Zhai H, Li L, Zhang L, Wang L, Yuan J, Chen B, Hong B, Liu J, Lv Y, Cai Y, Zhang Y, Chang S, Gou J, Chen H, Liu M, Wang Z, Xin T, Zhou F, Zhao X, Zhang D, Xie Q, Ma H, Xu Y, Cheng H, Han H (2024). Connectomic Organization of the Suprachiasmatic Nucleus. ***bioRxiv***, [2024.10.20.619252v1](https://doi.org/10.1101/2024.10.20.619252), submitted.
* **Li Z**, **Yang X**, **Liu J**, Hong B, Zhang Y, Zhai H, Shen L, Chen X, Liu Z, Han H (2024). DeepMulticut: Deep Learning of Multicut Problem for Neuron Segmentation from Electron Microscopy Volume. ***IEEE Transactions on Pattern Analysis and Machine Intelligence***, [early access](https://ieeexplore.ieee.org/document/10547294).
* **Guo J**, **Wang Z**, Zhai H, Liu J, Zhang Y, Han H (2024). Re-isotropic Segmentation for Subcellular Ultrastructure in Anisotropic EM Images. ***IEEE Transactions on Medical Imaging***, major revision.
* **Liu J**, **Qi J**, **Chen X**, **Li Z**, Hong B, Ma H, Li G, Shen L, Liu D, Kong Y, Zhai H, Xie Q, Han H, Yang Y (2022). Fear memory-associated synaptic and mitochondrial changes revealed by deep learning-based processing of electron microscopy data. ***Cell Reports***, [*40*(5), 111151](https://www.sciencedirect.com/science/article/pii/S2211124722009603).
* Hong B, Liu J, Zhai H, Liu J, Shen L, Chen X, Xie Q, Han H (2022). Joint reconstruction of neuron and ultrastructure via connectivity consensus in electron microscope volumes. ***BMC Bioinformatics***, [*23*(1), 453](https://bmcbioinformatics.biomedcentral.com/articles/10.1186/s12859-022-04991-6).
* **Liu J**, **Hong B**, Xiao C, Zhai H, Shen L, Xie Q, Han H (2024). A novel 3D instance segmentation network for synapse reconstruction from serial electron microscopy images. ***Expert Systems with Applications***, [*255*, 124562](https://www.sciencedirect.com/science/article/abs/pii/S0957417424014295).
* Liu J, Zheng Y, Lin L, Guo J, Lv Y, Yuan J, Zhai H, Chen X, Shen L, Li L, Bai S, Han H (2024). A robust transformer-based pipeline of 3D cell alignment, denoise and instance segmentation on electron microscopy sequence images. ***Journal of Plant Physiology***, [*297*, 154236](https://www.sciencedirect.com/science/article/pii/S0176161724000671).

**Patent**

* **Chen X**, **Zhai H**, Shen L, Xie Q, Han H (2023). Method, system and device for analyzing behavior of cage animal based on twin network. Patent No. [CN111582214B](https://patents.google.com/patent/CN111582214B/en).

<!-- 
> Hong B, Liu J, **Zhai H**, Liu J, Shen L, Chen X, Xie Q, Han H\*. Joint reconstruction of neuron and ultrastructure via connectivity consensus in electron microscope volumes [J]. *BMC Bioinformatics*, 2022, 23(1): 1-23. DOI: [10.1186/s12859-022-04991-6](https://doi.org/10.1186/s12859-022-04991-6) <br>
[![Acrobat Paper](https://img.shields.io/badge/Paper-pdf-blue?style=social&logo=adobeacrobatreader)](https://link.springer.com/content/pdf/10.1186/s12859-022-04991-6.pdf)


> Liu J, Qi J, Chen X, Li Z, Hong B, Ma H, Li G, Shen L, Liu D, Kong Y, **Zhai H**, Xie Q\*, Han H\*, Yang Y\*. Fear memory-associated synaptic and mitochondrial changes revealed by deep learning-based processing of electron microscopy data [J]. *Cell Reports*, 2022, 40(5): 111151. DOI: [10.1016/j.celrep.2022.111151](https://doi.org/10.1016/j.celrep.2022.111151). <br>
[![Acrobat Paper](https://img.shields.io/badge/Paper-pdf-blue?style=social&logo=adobeacrobatreader)](https://www.sciencedirect.com/sdfe/reader/pii/S2211124722009603/pdf)

> Chen X, **Zhai H**, Liu D, Li W, Ding C, Xie Q, Han H\*. SiamBOMB: A Real-time AI-based System for Home-cage Animal Tracking, Segmentation and Behavioral Analysis [C]//*Proceedings of the Twenty-Ninth International Joint Conference on Artificial Intelligence Demos*. 2020: 5300-5302. DOI: [10.24963/ijcai.2020/776](https://doi.org/10.24963/ijcai.2020/776). <br>
[![Acrobat Paper](https://img.shields.io/badge/Paper-pdf-blue?style=social&logo=adobeacrobatreader)](https://www.ijcai.org/proceedings/2020/0776.pdf)
[![DiagramsNet Poster](https://img.shields.io/badge/Poster-pdf-blue?style=social&logo=diagramsdotnet)](https://raw.githubusercontent.com/JackieZhai/JackieZhai.github.io-CDN/master/posters/CVPR2021_Chen_SiamBOMB.pdf)
[![GitHub Repo stars](https://img.shields.io/github/stars/JackieZhai/SiamBOMB?style=social)](https://github.com/JackieZhai/SiamBOMB)
[![YouTube Video Views](https://img.shields.io/youtube/views/lLIPdOsnzT8?style=social)](https://youtu.be/lLIPdOsnzT8)
[![Bilibili Video Views](https://img.shields.io/badge/Views-113-blue?style=social&logo=bilibili)](https://www.bilibili.com/video/av92152869)

> Li W, Liu A\*, Nie W\*, Song D, Li Y, Wang W, Xiang S, Zhou H, Bui N-M, Cen Y, Chen Z, Chung-Nguyen H, Diep G, Do T, Doubrovski E, Duong A, Geraedts J, Guo H, Hoang T, Li Y, Liu X, Liu Z, Luu D, Ma Y, Nguyen V, Nie J, Ren T, Tran M, Tran-Nguyen S, Tran M, Vu-Le T, Wang C, Wang S, Wu G, Yang C, Yuan M, **Zhai H**, Zhang A, Zhang F, Zhao S. Monocular Image Based 3D Model Retrieval [C]//*Eurographics Workshop on 3D Object Retrieval*. 2019. DOI: [10.2312/3dor.20191068](https://doi.org/10.2312/3dor.20191068). <br>
[![Acrobat Paper](https://img.shields.io/badge/Paper-pdf-blue?style=social&logo=adobeacrobatreader)](https://diglib.eg.org/bitstream/handle/10.2312/3dor20191068/103-110.pdf) -->

