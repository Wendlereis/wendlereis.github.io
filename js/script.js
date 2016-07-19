var self = this;

self.variable = ko.computed(function(){
    return self.otherVariable;
});

self.variable = ko.observableArray();