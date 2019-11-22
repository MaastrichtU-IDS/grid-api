import React from 'react';
import { HydraAdmin, ResourceGuesser } from '@api-platform/admin';

// Full examplet at https://github.com/api-platform/demo/blob/master/admin/src/App.js

export default () => (
    <HydraAdmin entrypoint={process.env.REACT_APP_API_ENTRYPOINT}>
        <ResourceGuesser name={"achievements"} />
        <ResourceGuesser name={"sessions"} />
    </HydraAdmin>);
