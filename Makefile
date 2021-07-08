ifeq ($(OS),Windows_NT)
	OSFLAG += -D WIN32
	ifeq ($(PROCESSOR_ARCHITECTURE),AMD64)
		OSFLAG += -D AMD64
	endif
	ifeq ($(PROCESSOR_ARCHITECTURE),x86)
		OSFLAG += -D IA32
	endif
else
	UNAME_S := $(shell uname -s)
	ifeq ($(UNAME_S),Linux)
		OSFLAG += -D LINUX
	endif
	ifeq ($(UNAME_S),Darwin)
		OSFLAG += -D OSX
	endif
		UNAME_P := $(shell uname -p)
	ifeq ($(UNAME_P),x86_64)
		OSFLAG += -D AMD64
	endif
	ifneq ($(filter %86,$(UNAME_P)),)
		OSFLAG += -D IA32
	endif
	ifneq ($(filter arm%,$(UNAME_P)),)
		OSFLAG += -D ARM
	endif
endif

ifeq ($(findstring OSX,$(OSFLAG)),OSX)
    DOCKER=docker
else
    DOCKER=sudo docker
endif

REPOSITORY=

hello:
	@echo Hello Wolrd!

docker-build:
	$(DOCKER) build --build-arg -t $(REPOSITORY):kostandcost .
	$(DOCKER) images --filter=reference='$(REPOSITORY):kostandcost'

docker-push:
	$(eval IMAGE_ID := $(shell $(DOCKER) images --filter=reference='$(REPOSITORY):kostandcost' --format "{{.ID}}"))
	$(DOCKER) tag $(IMAGE_ID) $(REPOSITORY):kostandcost
	$(DOCKER) push $(REPOSITORY):kostandcost